<div id="header" class="flex">
    <img src="../assets/img/dc-logo.png" alt="DC logo" />
    <ul class="flex">
        <li class="flex text-uppercase">
            <a :class="{ active: link.current }" :href="link.url">{{link.text}}</a>
        </li>
    </ul>
</div>
