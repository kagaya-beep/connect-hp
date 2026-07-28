const assert = require('node:assert/strict');
const fs = require('node:fs');
const vm = require('node:vm');
const path = require('node:path');

const templatePath = path.join(__dirname, '..', 'wordpress-theme', 'connect_original', 'page-contact.php');
const template = fs.readFileSync(templatePath, 'utf8');
const script = template.match(/<script>([\s\S]*?)<\/script>/)[1];

function runPrefill(search, initialMessage = '') {
  let onReady;
  const radio = {
    checked: false,
    dispatchEvent() {}
  };
  const textarea = {
    value: initialMessage,
    dispatchEvent() {}
  };
  const context = {
    URLSearchParams,
    Event: class Event {
      constructor(type) {
        this.type = type;
      }
    },
    window: { location: { search } },
    document: {
      addEventListener(type, callback) {
        if (type === 'DOMContentLoaded') onReady = callback;
      },
      querySelector(selector) {
        if (selector.includes('your-type')) return radio;
        if (selector.includes('textarea')) return textarea;
        return null;
      }
    }
  };

  vm.runInNewContext(script, context);
  onReady();
  return { radio, textarea };
}

const recruit = runPrefill('?type=recruit&job=法人営業');
assert.equal(recruit.radio.checked, true);
assert.equal(recruit.textarea.value, '採用応募／法人営業に応募希望');

const general = runPrefill('?type=contact');
assert.equal(general.radio.checked, false);
assert.equal(general.textarea.value, '');

const existing = runPrefill('?type=recruit&job=技術職', '入力済みの内容');
assert.equal(existing.textarea.value, '入力済みの内容');

console.log('contact recruit prefill tests passed');
