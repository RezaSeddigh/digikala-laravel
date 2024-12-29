<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.client.links')
</head>
<body>
<!-- Header -->
@include('livewire.client.header.index')
<main>
   {{$slot}}
</main>
<!-- Footer -->
@include('livewire.client.footer.index')
@include('layouts.client.scripts')
</body>
</html>
