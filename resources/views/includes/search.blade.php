<form action="" method="GET">
    <div class="row">
        <div class="col s8 m8">
            <div class="file-path-wrapper">
                <input style="height:36px; line-height:36px; margin-left:5px;" placeholder="Search" name="search"  type="text" value="{{ isset($search) ? $search : ''}}"/>
            </div>
        </div>
        <div class="col s4 m4" style="padding-left:0px;">
            <button type="submit" class="btn btn-1" style="margin-left:5px; height:36px; line-height:36px;">
                <i class="material-icons left">search</i>
                Search
            </button>
        </div>
    </div>
</form>
