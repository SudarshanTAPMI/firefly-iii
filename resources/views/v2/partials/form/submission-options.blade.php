<!-- RETURN HERE AFTER CREATE -->
<template x-if="'create' === formBehaviour.formType">
    <div class="form-check">
        <input class="form-check-input" x-model="formStates.returnHereButton" type="checkbox" id="returnButton">
        <label class="form-check-label" for="returnButton"><em class="material-icons-outlined">undo</em> {{ __('firefly.create_another') }}</label>
    </div>
</template>

<!-- RESET AFTER -->
<template x-if="'create' === formBehaviour.formType">
    <div class="form-check">
        <input class="form-check-input" x-model="formStates.resetButton" type="checkbox" id="resetButton" :disabled="!formStates.returnHereButton">
        <label class="form-check-label" for="resetButton"><em class="material-icons-outlined">description</em> {{ __('firefly.reset_after') }}</label>
    </div>
</template>
<!-- RETURN HERE AFTER UPDATE -->
<template x-if="'update' === formBehaviour.formType">
    <div class="form-check">
        <input class="form-check-input" x-model="formStates.returnHereButton" type="checkbox" id="returnButton">
        <label class="form-check-label" for="returnButton"><em class="material-icons-outlined">undo</em> {{ __('firefly.after_update_create_another') }}</label>
    </div>
</template>
<!-- CLONE INSTEAD OF UPDATE -->
<template x-if="'update' === formBehaviour.formType">
    <div class="form-check">
        <input class="form-check-input" x-model="formStates.saveAsNewButton" type="checkbox" id="saveAsNewButton">
        <label class="form-check-label" for="saveAsNewButton">{{ __('firefly.store_as_new') }}</label>
    </div>
</template>
