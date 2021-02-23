@csrf

<div class="form-group">
    <label for="name">Nombre:</label>
    <input class="form-control border-0 bg-light shadow-sm" 
        type="text" 
        name="name" 
        value=" {{ old('name',$producto->name)}} ">
</div>

<div class="form-group">
    <label for="brand">Marca:</label>
    <input class="form-control border-0 bg-light shadow-sm" 
        type="text" 
        name="brand" 
        value=" {{ old('brand',$producto->brand)}}">
</div>

<div class="form-group">
    <label for="color">Color:</label>
    <input class="form-control border-0 bg-light shadow-sm" 
        type="text" 
        name="color" 
        value=" {{ old('color',$producto->color)}}">
</div>

<div class="form-group">
    <label for="price">Precio:</label>
    <input class="form-control border-0 bg-light shadow-sm" 
        type="text" 
        name="price" 
        value=" {{ old('price',$producto->price)}}">
</div>




