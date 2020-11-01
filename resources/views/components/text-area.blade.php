<textarea {{ $attributes->merge(['class' => "form-text border rounded-md shadow-sm", "id" => "", "name" => "", "rows"=>"10", "cols"=>"50"]) }}>
    {{$slot}}
</textarea>