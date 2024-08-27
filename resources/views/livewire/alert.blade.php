<div class="alerts">
    @foreach($alerts as $index => $alert)
        <article 
            class="{{$alert->type}}" 
            wire:key="alert_{{$index}}"
            x-init="setTimeout(() => $wire.removeAlert({{$index}}), 3000)"
            wire:transition.slide.up="150ms"
            >
            <i class="{{ $alert->iconClass }}"></i>
            <span class="message">{{ $alert->msg }}</span>
        </article>
    @endforeach
</div>
