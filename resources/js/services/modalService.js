export default class ModalService {

    openModal(modalId) {
        $('#' + modalId).modal('show');
    }

    hideModal(modalId) {
        $('#' + modalId).modal('hide');
        $('body').removeClass('modal-open');
    }

    subscribeOnCloseEvent(modalId, callback) {
        $('#' + modalId).on('hidden.bs.modal', callback);
    }
}
