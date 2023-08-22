@php use App\Models\Currency; @endphp
@foreach(Currency::all() as $currency)
  <option
    value="{{$currency->id}}"{{getSetting('default_currency') == $currency->id ? 'selected' : ''}}>{{$currency->country.'-'.$currency->code.'-'.$currency->symbol}}</option>
@endforeach
