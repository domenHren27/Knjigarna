


<select {{$attributes->merge(['class' => 'form-select rounded-md shadow-sm', 'name' => '', 'id' => ''])}}>
    <option value="slovenski">Slovenščina</option>
    <option value="nemški" @if ($selected == "nemški")
    selected="selected"
    @endif>Nemščina</option>
    <option value="angleški" @if ($selected == "angleški")
    selected="selected"
    @endif>Angleščina</option>
    <option value="ruski" @if ($selected == "ruski")
        selected="selected"
    @endif>Ruščina</option>
</select>
        
        
    

    