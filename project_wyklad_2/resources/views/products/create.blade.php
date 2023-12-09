<h3>Dodaj produkt</h3>

<div>
 <form action="{{route('products.store')}}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nazwa" value="{{old('name')}}">
    @error('name')
    {{$message}}
    @enderror<br><br>
     <input type="number" name="price" id="price" placeholder="Cena" value="{{old('price')}}">
     @error('price')
     {{$message}}
     @enderror<br><br>
     <textarea name="description" id="" cols="30" rows="10" placeholder="Opis...">{{old('description')}}</textarea><br><br>
    <button type="submit">Dodaj produkt</button>
 </form>
</div>
