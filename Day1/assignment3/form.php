<form action="index.php" method="post" class="p-4">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="text-center mb-3">
        <button type="submit" name="action" value="Insert" class="btn btn-primary me-2">Insert</button>
        <button type="submit" name="action" value="Update" class="btn btn-secondary me-2">Update</button>
        <button type="submit" name="action" value="Delete" class="btn btn-danger me-2">Delete</button>
    </div>
    <div class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Value" name="searchValue" aria-label="Search Value">
            <select class="form-select" name="searchField">
                <option value="name" selected>Name</option>
                <option value="phone">Phone</option>
                <option value="address">Address</option>
                <option value="email">Email</option>
            </select>
            <button class="btn btn-outline-secondary" type="submit" name="action" value="Search">Search</button>
        </div>
    </div>
</form>
