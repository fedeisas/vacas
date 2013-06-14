@extends('layouts.master')

@section('content')
    <table class="table table-striped">
    	<thead>
    		<tr>
    			<th>Caravana</th>
    			<th>Edad</th>
    			<th class="hidden-phone">Tacto</th>
    			<th class="hidden-phone"h>Paricion</th>
    			<th>Vacunas</th>
                <th>Nutricion</th>
                <th>Estado</th>
    		</tr>
    	</thead>
    	<tbody>
            @foreach($cows as $cow)
                <tr>
                    <td>
                        {{ $cow->senasa_id }}
                    </td>
                    <td>
                        {{ $cow->getAge() }}
                    </td>
                    <td class="hidden-phone">
                        {{ $cow->tact->name }}
                    </td>
                    <td class="hidden-phone">
                        {{ $cow->calving->name }}
                    </td>
                    <td>
                        @if($cow->hasVaccines())
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td>
                        {{ $cow->nutritional_status }}
                    </td>
                    <td>
                        {{ $cow->status->name }}
                    </td>
                </tr>
            @endforeach
    	</tbody>
    </table>
@stop