<form class="d-inline" action="{{route('setLocale', $lang)}}" method="POST">
    @csrf
    {{-- sistemare icone bandierine --}}
  <button type="submit" class="btn">
<img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="24" height="24" alt="">
</button>
</form>