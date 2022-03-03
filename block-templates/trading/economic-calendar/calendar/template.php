<?php 
// available fields
[
'title'           => $title,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
wp_enqueue_script("economic-calendar");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>

<section class=" block">    
    <div class="container">

        <div class="datepicker align-items-center justify-content-center mb-5">
            <label class="mb-0">
                From: <input class="ms-2" id="date-from" type="date">
            </label>

            <label class="mb-0">
                To: <input class="ms-2" id="date-to" type="date">
            </label>

            <button type="button" class="btn btn-outline-secondary--dark btn-outline-black--light" onclick="updateTable()">
                Apply
            </button>
        </div>

        <div class="calendar">
            <div class="calendar__header d-flex align-items-center justify-content-between flex-wrap">
                <h3 class="text-capitalize text-white mb-0"><?php echo $title; ?></h3>
                <div class="d-flex filters">
                    <button type="button" class="btn btn-primary d-flex align-items-center gap-2 px-3 filters__button"
                        data-toggle="modal" data-target="#exampleModal">
                        Filters
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 18L21 18" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M3 18H5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.5 20.5C8.88071 20.5 10 19.3807 10 18C10 16.6193 8.88071 15.5 7.5 15.5C6.11929 15.5 5 16.6193 5 18C5 19.3807 6.11929 20.5 7.5 20.5Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20 12H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M3 12H10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16.5 14.5C17.8807 14.5 19 13.3807 19 12C19 10.6193 17.8807 9.5 16.5 9.5C15.1193 9.5 14 10.6193 14 12C14 13.3807 15.1193 14.5 16.5 14.5Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13 6H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 6H4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.5 8.5C11.8807 8.5 13 7.38071 13 6C13 4.61929 11.8807 3.5 10.5 3.5C9.11929 3.5 8 4.61929 8 6C8 7.38071 9.11929 8.5 10.5 8.5Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <button type="button" class="ms-3 btn btn-primary d-flex align-items-center gap-2 px-3 filters__button"
                        onclick="openDatePicker()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 4H5C4.44772 4 4 4.44772 4 5V19C4 19.5523 4.44772 20 5 20H19C19.5523 20 20 19.5523 20 19V5C20 4.44772 19.5523 4 19 4Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 16H16.002V16.002H16V16Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 16H12.002V16.002H12V16Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 16H8.002V16.002H8V16Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16 12H16.002V12.002H16V12Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 12H12.002V12.002H12V12Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 12H8.002V12.002H8V12Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M4 8H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 2V4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 2V4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="calendar__body table-responsive pt-1 bg-dark-1">
                <table class="table table-hover bg-dark-1">
                    <thead class="thead-inverse">
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Country</th>
                            <th scope="col">Event</th>
                            <th scope="col">Actual</th>
                            <th scope="col">Forecast</th>
                            <th scope="col">Previous</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark-1">
            <div class="modal-body text-left">
                <h5 class="text-center">Select countries</h5>
                <div class="countries d-flex flex-wrap">
                    <div class="checkbox">
                        <label><input type="checkbox" rel="US" />United States</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="UK" />United Kingdom</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="FR" />France</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="DE" />Germany</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="JP" />Japan</label>
                    </div>
                </div>
                <h5 class="text-center">Select categories</h5>
                <div class="categories d-flex flex-wrap">
                    <div class="checkbox">
                        <label><input type="checkbox" rel="c94405b5-5f85-4397-ab11-002a481c4b92" />Central
                            Banks</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="fa6570f6-e494-4563-a363-00d0f2abec37" />Capital
                            Flows</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="24127f3b-edce-4dc4-afdf-0b3bd8a964be" />Economic
                            Activity</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="dd332fd3-6996-41be-8c41-33f277074fa7" />Energy</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="7dfaef86-c3fe-4e76-9421-8958cc2f9a0d" />Holidays</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="8896aa26-a50c-4f8b-aa11-8b3fccda1dfd" />Bond
                            Auctions</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="1e06a304-fac6-440c-9ced-9225a6277a55" />Housing
                            Market</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="33303f5e-1e3c-4016-ab2d-ac87e98f57ca" />Inflation</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"
                                rel="e229c890-80fc-40f3-b6f4-b658f3a02635" />Consumption</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="91da97bd-d94a-4ce8-a02b-b96ee2944e4c" />Labor
                            Market</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="9c4a731a-d993-4d55-89f3-dc707cc1d596" />Interest
                            Rates</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" rel="e9e957ec-2927-4a77-ae0c-f5e4b5807c16" />Politics</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="updateTable();">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>