<fieldset>
    <legend>Tema:</legend>
    <label>
        <input 
            type="radio" 
            name="theme" 
            onclick="document.documentElement.setAttribute( 'data-theme', this.value )"
            wire:change="setTheme()"
            wire:model="theme"
            value="light"
            />
        Lys
    </label>
    <label>
        <input 
            type="radio" 
            name="theme" 
            onclick="document.documentElement.setAttribute( 'data-theme', this.value) "
            wire:change="setTheme()"
            wire:model="theme"
            value="dark"
            />
        Mørk
    </label>
    <label>
        <input 
            type="radio" 
            name="theme" 
            onclick="document.documentElement.removeAttribute( 'data-theme' )"
            wire:change="setTheme()"
            wire:model="theme"
            value="auto"
            />
        Automatisk
    </label>
</fieldset>
