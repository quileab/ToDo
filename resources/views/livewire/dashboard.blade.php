<?php

use Livewire\Volt\Component;

new class extends Component {
    public $data=[];

    public function mount()
    {
        $proyects = 4;
        $tasks = 32;
        $ratio = intval($tasks / $proyects);

        $this->data=[
            'projects' => $proyects,
            'tasks' => $tasks,
            'In Progress' => $ratio * 15,
            'Completed' => $ratio * 4,
            'On Hold' => $ratio * 2,
            'Canceled' => $ratio * 1,
            'Other' => $ratio * 2,
        ];

    }

};
?>

<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <x-stat
    title="Proyectos"
    description="Cantidad de Proyectos Activos"
    value="{{ $data['projects']}}"
    icon="o-clipboard-document-list"
    class="text-orange-500"
    color="text-orange-400" />
    <x-card title="Proyectos">
        <x-progress-radial value="{{ $data['In Progress'] }}" unit="In Progress" class="text-blue-500" />
        <x-progress-radial value="{{ $data['Completed'] }}" unit="Completed" class="text-green-500" />
        <x-progress-radial value="{{ $data['On Hold'] }}" unit="On Hold" class="text-orange-400" />
        <x-progress-radial value="{{ $data['Canceled'] }}" unit="Canceled" class="text-red-600" />
    </x-card>
</div>
