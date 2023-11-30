<div class="popup">
    <span id="closePopup" onclick="closePopup()" class="close-btn">&times;</span>
    <form id="InsertForm" onsubmit="insertProcess()">
        <div class="row">
            <div class="col-xl-6 mt-30">
                <div class="form-group">
                    <input type="text" class="form-control" name="prdnm" id="name" placeholder="Enter Product Name :">
                </div>
            </div>
            <div class="col-xl-6 mt-30">
                <div class="form-group">
                    <input type="file"  name="prdimg" placeholder="Enter Product Image :">
                </div>
            </div>
            <div class="col-xl-12 mt-30">
                <div class="form-group">
                    <input type="number" class="form-control" name="price" id="subject" placeholder="Enter Product Price :">
                </div>
            </div>
            <div class="col-xl-12 mt-30">
                <div class="form-group">
                    <textarea name="desc" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-xl-12 mt-20 text-center">
                <button type="submit" class="site-btn">submit</button>
            </div>
        </div>
    </form>
</div>