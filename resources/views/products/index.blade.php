<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <h1>Products</h1>
    {{-- <h2>{{ $title }}</h2> --}}
    {{-- <p>{{ $description }}</p> --}}

    @foreach ( $data as $item )

        <p>{{ $item }}</p>

    @endforeach
</div>
