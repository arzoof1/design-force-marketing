import { Controller } from "@hotwired/stimulus";

// Adds dynamic collection rows for CollectionType fields using data-prototype
export default class extends Controller {
  static targets = ["list"]; 
  static values = { 
    index: Number, 
    addLabel: String 
  }

  connect() {
    this.indexValue = this.listTarget.children.length || 0;
  }

  add(event) {
    event.preventDefault();
    const prototype = this.listTarget.dataset.prototype;
    const newForm = prototype.replace(/__name__/g, this.indexValue);
    
    const wrapper = document.createElement('div');
    wrapper.className = 'collection-item';
    wrapper.innerHTML = newForm + '<div class="actions"><button class="btn" type="button" data-action="collection#remove">Remove</button></div>';
    
    this.listTarget.appendChild(wrapper);
    this.indexValue++;
    
    // Focus on the first input of the new form
    const firstInput = wrapper.querySelector('input, select');
    if (firstInput) {
      firstInput.focus();
    }
  }

  remove(event) {
    event.preventDefault();
    const item = event.target.closest('.collection-item');
    if (item) {
      item.remove();
    }
  }
}