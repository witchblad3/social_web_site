<template>
    <div class="col-lg-6 vstack gap-4">
        <div class="tab-pane fade active show">
            <div class="card mb-4">
                <div class="card-header border-0 pb-0">
                    <h5>Настройки приватности</h5>
                    <span>тут настройки приватоcсти</span>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-2">
                            <label for="first_name">Имя</label>
                            <input type="text" class="form-control" id="first_name" title="Имя"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PrivacySettings"
}
</script>
