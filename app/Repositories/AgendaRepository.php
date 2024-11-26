<?php

namespace App\Repositories;
use App\Models\Agenda;
use App\Interfaces\AgendaInterface;
use Illuminate\Support\Facades\Storage;

class AgendaRepository implements AgendaInterface
{
    private $agenda;

    public function __construct(Agenda $agenda)
    {
        $this->agenda = $agenda;
    }

    public function getAll()
    {
        return $this->agenda->orderBy('start_date', 'asc')->get();
    }

    public function getPast()
    {
        $today = now(); 
    
        // 10 Agenda yang telah lalu
        $pastAgendas = $this->agenda
            ->where('start_date', '<', $today) // Agenda yang sudah lewat
            ->orderBy('start_date', 'asc')
            ->orderBy('start_time', 'asc') // Urutkan dari yang terbaru ke yang terlama
            ->take(10) // Ambil hingga 10 data
            ->get();
    
        return $pastAgendas;
    }

    public function getUpcoming()
    {
        $today = now();

        // 10 Agenda yang akan datang
        $upcomingAgendas = $this->agenda
        ->where('start_date', '>=', $today) // Agenda yang akan datang
        ->orderBy('start_date', 'asc')
        ->orderBy('start_time', 'asc') // Urutkan dari yang terdekat ke yang terjauh
        ->take(10) // Ambil hingga 10 data
        ->get();

        return $upcomingAgendas;
    }
    

    public function getById($id)
    {
        return $this->agenda->find($id);
    }

    public function store($data)
    {
        return $this->agenda->create($data);
    }

    public function update($id, $data)
    {
        $agenda = $this->agenda->find($id);
        $agenda->update($data);
        return $agenda;
    }

    public function delete($id)
    {
        $agenda = $this->agenda->find($id);
        $agenda->delete();
        return $agenda;
    }
}