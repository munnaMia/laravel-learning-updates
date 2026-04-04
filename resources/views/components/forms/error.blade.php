  @props([
    'name'=>'required'
  ])

  @error($name)
      <p>You have an error {{ $errors }}</p>
  @enderror
