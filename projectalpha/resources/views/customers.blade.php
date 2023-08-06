@extends('layouts.main')
@include('layouts.navbar')
@section('main-container')
<div class="table-responsive">
    <table class="table table-centered mb-0" id="btn-editable">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>date-time</th>
            <th class="tabledit-toolbar-column"></th></tr>
        </thead>
    
        <tbody>
            <tr id="1">
                <td><span class="tabledit-span tabledit-identifier">1</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled=""></td>
                <td class="tabledit-view-mode"><span class="tabledit-span">Tiger Nixon</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Tiger Nixon" style="display: none;" disabled=""></td>
                <td class="tabledit-view-mode"><span class="tabledit-span">System Architect</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="System Architect" style="display: none;" disabled=""></td>
                <td class="tabledit-view-mode"><span class="tabledit-span">Edinburgh</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled=""></td>
                <td class="tabledit-view-mode"><span class="tabledit-span">61</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="61" style="display: none;" disabled=""></td>
                <td>2011/04/25</td>
                <td class="tabledit-view-mode"><span class="tabledit-span">$320,800</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$320,800" style="display: none;" disabled=""></td>
            <td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
   <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-success" style="float: none;"><span class="mdi mdi-pencil"></span></button></div>
   
   
</div></td></tr>
        </tbody>
    </table>
</div></div>
@endsection
