@extends('layouts.app')

@section('content')

<div>
    <input wire:model="message" type="text" class="border p-2 rounded" />
    <p class="mt-2">メッセージ: {{ $message }}</p>
</div>

@endsection
