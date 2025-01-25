@extends('layouts.app')

@section('content')
<div>
    <input 
        type="text" 
        wire:model="search" 
        placeholder="ユーザー名を検索" 
        class="border p-2 rounded w-full"
    />

    <ul class="mt-4">
        @forelse ($users as $user)
            <li class="py-1">{{ $user->name }} ({{ $user->email }})</li>
        @empty
            <li class="text-gray-500">結果がありません</li>
        @endforelse
    </ul>
</div>
@endsection