<div class="filament-map-button justify-center content-center" id="{{ $action->getName() }}">
    <x-filament-maps::actions.action
        :action="$action"
        :label="$getLabel()"
        component="filament-maps::icon-button"
        class="filament-page-icon-button-action"
    />
</div>
