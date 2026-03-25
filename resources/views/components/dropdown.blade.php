@props(['countries' => []])
<div class="dropdown custom-dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Select Country
    </button>

    <ul class="dropdown-menu custom-dropdown-menu">
        @foreach ($countries as $name => $details)
        <li><a class="dropdown-item" href="#">{{ ucfirst($name) }}</a></li>
        @endforeach
    </ul>
</div>