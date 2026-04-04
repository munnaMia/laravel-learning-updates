<li>
    {{-- here attrubutes mean the attribute that passes <x-card class="nasldkf" more="alsdkfj" id="alsk"> and blade merge with the html  --}}
    <a {{ $attributes->merge(['class'=>'cssClass here']) }}>
        {{ $slot }}
    </a>
</li>