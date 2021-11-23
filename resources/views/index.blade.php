<x-layout>
    <x-slot name="title">
        BBS
    </x-slot>

    <h1>BBS</h1>
    <ul>
        @forelse ($posts as $index => $post)
        <li>
            <a href="{{route('posts.show',$index)}}">{{$post}}</a>
        </li>
        @empty
        <li>no post</li>
        @endforelse
    </ul>
</x-layout>
