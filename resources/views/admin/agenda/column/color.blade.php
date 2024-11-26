<div class="flex h-8">
    @if($data->color === 'red')
        <div class="h-full w-1/2 bg-box-red-primary"></div>
        <div class="h-full w-1/2 bg-box-red-secondary"></div>
    @elseif($data->color === 'orange')
        <div class="h-full w-1/2 bg-box-orange-primary"></div>
        <div class="h-full w-1/2 bg-box-orange-secondary"></div>
    @elseif($data->color === 'blue')
        <div class="h-full w-1/2 bg-box-blue-primary"></div>
        <div class="h-full w-1/2 bg-box-blue-secondary"></div>
    @elseif($data->color === 'green')
        <div class="h-full w-1/2 bg-box-green-primary"></div>
        <div class="h-full w-1/2 bg-box-green-secondary"></div>
    @elseif($data->color === 'pink')
        <div class="h-full w-1/2 bg-box-pink-primary"></div>
        <div class="h-full w-1/2 bg-box-pink-secondary"></div>
    @elseif($data->color === 'yellow')
        <div class="h-full w-1/2 bg-box-yellow-primary"></div>
        <div class="h-full w-1/2 bg-box-yellow-secondary"></div>
    @elseif($data->color === 'purple')
        <div class="h-full w-1/2 bg-box-purple-primary"></div>
        <div class="h-full w-1/2 bg-box-purple-secondary"></div>
    @else
        <div class="h-full w-1/2 bg-gray-500"></div>
        <div class="h-full w-1/2 bg-gray-300"></div>
    @endif
</div>
