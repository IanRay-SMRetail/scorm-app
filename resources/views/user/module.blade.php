<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           @isset($header)
               {{$header}}
           @endisset
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-2 justify-center">
                @foreach ($data as $module)
                <a href="{{ asset($module->Path.'/index.php?modid='.$module->id)}}" class="p-6 mx-3 text-gray-900" target="_blank">
                    <div class="bg-black text-white rounded-[25px] p-12 bg-gradient-to-br to-gray-900 from-blue-900 transition-all duration-300 filter grayscale hover:grayscale-0">
                        <h1>{{$module->OMName}}</h1>
                    </div>
                </a>
                @endforeach
            </div>
            {{$data->links()}}
        </div>
    </div>
</x-app-layout>
