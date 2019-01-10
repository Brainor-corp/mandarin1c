jQuery(document).ready(function ($) {
    $(".sticky").stick_in_parent();

    function totalRecount(total, serviceCount, formFields) {
        var checkedServices = document.getElementsByClassName("service-calculator-checkbox"),
            result = new Object();
        result['total'] = total;
        result['serviceCount'] = serviceCount;
        result['formFields'] = formFields;
        result['required'] = [];
        $('.service-calculator-checkbox:checked').each(function () {
            var allRequired = $(this).parent().find('.service-package-required');
            for (var i = 0, len = allRequired.length; i < len; i++) {
                var requiredPackageName = allRequired[i].getAttribute('data-required-package-name');
                result['required'][i] = requiredPackageName;
            }
            var servicePrice = $(this).data('serviceCalculatorPrice'),
                serviceName = $(this).data('serviceCalculatorName'),
                serviceId = $(this).data('serviceCalculatorId');
            result['total'] = result.total + parseInt(servicePrice);
            result['serviceCount'] = result.serviceCount + 1;
            result['formFields'] += '' +
                '<div class="col-sm-9">' +
                '<input type="text" class="form-control" name="services[' + serviceId + '][name]" value="' + serviceName + '" readonly>' +
                '</div>' +
                '<div class="col-sm-3">' +
                '<input type="text" class="form-control" name="services[' + serviceId + '][price]" value="' + servicePrice + '" readonly>' +
                '</div>';
        });

        return result;
    }

    function checkRequired(required, status) {
        for (var i = 0, len = required.length; i < len; i++) {
            var requiredPackageId = required[i].getAttribute('data-required-package-id');
            var requiredPackages = document.getElementsByClassName('p-' + requiredPackageId + '-r');
            for (var i2 = 0, len2 = requiredPackages.length; i2 < len2; i2++) {
                var thisId = requiredPackages[i2].getAttribute('data-required-service-id');
                document.getElementById('service-calculator-checkbox-' + thisId).checked = status;
            }
        }
    }

    $(document).on('click', '.service-calculator-checkbox', function (e) {
        // e.preventDefault();
        var serviceId = $(this).data('serviceCalculatorId'),
            thisCheckbox = document.getElementById('service-calculator-checkbox-' + serviceId),
            curServiceRequired = document.getElementsByClassName('s-' + serviceId + '-p-r');

        // console.log(thisCheckbox.checked);
        if (thisCheckbox.checked) {
            thisCheckbox.checked = true;
            var packages = checkRequired(curServiceRequired, true);
        }
        else {
            thisCheckbox.checked = false;
            var packages = checkRequired(curServiceRequired, false);
        }
        var result = totalRecount(0, 0, '');
        if (result.required.length > 0) {
            var packagesResult = '<b>Выбрано все из: </b><br>';
        } else {
            var packagesResult = '';
        }

        result.required.forEach(function callback(currentValue, index, array) {
            packagesResult += currentValue + '<br>';
        });

        $('#calculator-services-total-value').html(result.total);
        $('#calculator-services-count-value').html(result.serviceCount);

        $('#calculator-modal-services-total-value').val(result.total).attr('value', result.total);
        $('#calculator-modal-services-count-value').val(result.serviceCount).attr('value', result.serviceCount);

        $('#modal-selected-services').html(result.formFields);

        $('.calculator-services-all-packages').html(packagesResult);
    });

    $('form').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var ajaxResultBlock = $('#ajaxResult');

        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            beforeSend: function () {
                $('#submitButton').attr('disabled', true);
                ajaxResultBlock.html('Отправка..');
                ajaxResultBlock.removeClass('d-none alert-success alert-danger');
            }
        }).error(function (data) {
            console.log(data);
            $('#submitButton').attr('disabled', false);
            ajaxResultBlock.addClass('alert-danger');
            ajaxResultBlock.html('Произошла ошибка. Пожалуйста, обновите страницу и попробуйте снова.');
        }).success(function (data) {
            $('#submitButton').attr('disabled', false);
            ajaxResultBlock.addClass('alert-success');
            ajaxResultBlock.html(data);
        });
    });
});