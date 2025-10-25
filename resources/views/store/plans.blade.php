@extends('layouts.app')

@section('title', 'Shop')

@section('content')
    <div class="grid lg:grid-cols-3 gap-8">
        {{-- Categories --}}
        <div class="lg:col-span-1">
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body space-y-3">
                    <h2 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>
                        <span>Categories</span>
                    </h2>

                    <ul class="space-y-1.5">
                        @forelse ($categories as $category)
                            <li>
                                <a href="{{ route('store.plans.index', ['category' => $category->id]) }}"
                                    @class([
                                        'btn w-full',
                                        'btn-active btn-accent' => $category->id === $activeCategory->id,
                                    ])>
                                    <span class="text-ellipsis line-clamp-1">{{ $category->name }}</span>
                                </a>
                            </li>
                        @empty
                            <div class="flex flex-col items-center justify-center text-center p-8 text-base-content/70">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-3 text-base-content/50"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8.25C3 7.007 4.007 6 5.25 6h13.5A2.25 2.25 0 0 1 21 8.25v7.5A2.25 2.25 0 0 1 18.75 18H5.25A2.25 2.25 0 0 1 3 15.75v-7.5Zm3 0v.008h.008V8.25H6Z" />
                                </svg>
                                <p class="font-medium">No categories found</p>
                                <p class="text-sm text-base-content/60 mt-1">Check back later or browse all available
                                    plans below.</p>
                            </div>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        {{-- Plans --}}
        <div class="lg:col-span-2 grid sm:grid-cols-2 gap-4">
            <div class="sm:col-span-full py-4">
                <h3 class="text-lg font-semibold">
                    {{ $activeCategory->name }}
                </h3>
                <p class="text-sm text-base-content/60">
                    {{ $activeCategory->description }}
                </p>
            </div>

            @forelse ($plans as $plan)
                <div class="card bg-base-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title justify-center">
                            <span class="text-ellipsis line-clamp-1">{{ $plan->name }}</span>
                        </h3>
                        <div class="text-center font-medium py-2">

                            <p>Starting at</p>
                            <span class="text-base font-bold">0.00</span>
                            <p>Monthly</p>
                        </div>
                        <div class="prose prose-sm text-center">
                            {!! $plan->description !!}
                        </div>

                        <a class="mt-4 btn btn-primary w-full" href="{{ route('store.plans.show', ['id' => $plan->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                            </svg>
                            <span>Configure</span>
                        </a>
                    </div>
                </div>
            @empty
                <div class="sm:col-span-full card bg-base-100 shadow-sm">
                    <div class="card-body flex flex-col items-center justify-center py-16 text-center text-base-content/70">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mb-4 text-base-content/50" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75v4.5m4.5-4.5v4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="font-semibold text-lg">No plans available</p>
                        <p class="text-sm text-base-content/60 mt-1">We&apos;re setting up new hosting plans soon. Check
                            back
                            later or contact support for details.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
