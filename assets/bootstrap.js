import { startStimulusApp } from '@symfony/stimulus-bridge';

import CollectionController from './controllers/collection_controller.js';
import FormStepController from './controllers/form_steps_controller.js';

const app = startStimulusApp(require.context(
    './controllers',
    true,
    /\.(j|t)sx?$/
));

// Registered stimulus controllers
app.register('collection', CollectionController);
app.register('form-steps', FormStepController);
export default app;
