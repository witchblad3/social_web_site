<template>
    <form @submit.prevent="updateHat">
        <div class="modal fade" id="avatarHatModal" tabindex="-1" role="dialog"
             aria-labelledby="avatarHatModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="avatarHatModalLabel">Modal title</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="file" class="form-control" ref="images"
                               id="hat" title="Аватар"
                               @change="setHatFile" name="images-upload"
                               accept="image/png, image/jpeg, image/jpg"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    name: "updateHatModal",
    methods:{
        updateHat(){
            this.$emit('updateHat');
        },
        setHatFile(){
            this.$emit('setHatFile', this.$refs.images.files[0]);
        }
    }
}
</script>
