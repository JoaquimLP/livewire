<div class="form-group">
    <label for="">Título</label>
    <input type="text" class="form-control" wire:model="title">
    @error('title')
        <span>{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="">Conteúdo</label>
    <textarea class="form-control" wire:model="body" id="" cols="10" rows="5"></textarea>
    @error('body')
        <span>{{$message}}</span>
    @enderror
</div>