import { Controller } from '@hotwired/stimulus';
export default class extends Controller {
    static targets = ["step"];
    static values = {
        index: Number
    }
    initialize() {
        // Show only the current step on load
        this.showCurrentStep();
    }
    showCurrentStep() {
        this.stepTargets.forEach((element, idx) => {
            element.classList.toggle('hidden', idx !== this.indexValue);
        });
    }
    next() {
        if (this.indexValue < this.stepTargets.length - 1) {
            this.stepTargets[this.indexValue].classList.add('hidden');
            this.indexValue++;
            this.stepTargets[this.indexValue].classList.remove('hidden');
        }
    }
    previous() {
        if (this.indexValue > 0) {
            this.stepTargets[this.indexValue].classList.add('hidden');
            this.indexValue--;
            this.stepTargets[this.indexValue].classList.remove('hidden');
        }
    }
}