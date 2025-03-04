<div>
    <input type="text" wire:model="user" />
    <input type="text" wire:model.lazy="lazy" />
    <input type="text" wire:model.defer="defer" />
    <input type="text" wire:model.debounce="debounce" />
    <input type="text" wire:model.lazy.200s="lazy-with-duration" />
    <input type="text" wire:model.debounce.500ms="debounce-with-duration" />
    <input type="text" wire:model='singlequote' />
    <a href="/test" wire:click.prevent="prevent">test</a>
    <x-button wire:click="submit" />
    <x-button wire:click='singlequote' />
    <x-button wire:click="params({{$prop}}, 42)" />
    <a href="/test" wire:click.prevent="preventParams({{$prop}}, 42)">test</a>

    <select wire:change="setSelector($event.target.value)">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="three">Three</option>
    </select>

    <select wire:change.debounce.500ms="changeDebounce($event.target.value)">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="three">Three</option>
    </select>

    <input wire:keyup="keyup" />
    <input wire:keydown.page-down="keydown-page-down">

    <p>First value</p>
    <p>Second value</p>

    <livewire:livewire-test-component-b/>

    <form wire:submit.prevent="upload">
        <input type="file" wire:model="supportersUpload">


        <button type="submit">Upload Participants</button>

        <input x-data="textInputFormComponent({
                        state: $wire.entangle('entangled-x-data-state-single-quote').defer,
                    })" type="text" wire:ignore="" id="phone" maxlength="32"
         >

        <input x-data='textInputFormComponent({
                        state: $wire.entangle("entangled-x-data-state-double-quote").defer,
                    })' type="text" wire:ignore="" id="phone" maxlength="32"
        >
    </form>


    <div x-data="{ open: @entangle('entangled-x-data-single-quote') }"></div>
    <div x-data='{ open: @entangle("entangled-x-data-double-quote") }'></div>

    <form wire:submit.prevent='uploadSinglequote'>
    </form>
</div>
