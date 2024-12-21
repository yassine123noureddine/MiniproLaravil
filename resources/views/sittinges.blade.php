{{-- @extends('../Layout/master') --}}
<x-master>

    hello this page sitteng

@section('section')

  <x-component-table :rows="$rows"/>
@endsection
</x-master>