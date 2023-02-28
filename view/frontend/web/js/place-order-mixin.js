define([
    'mage/utils/wrapper'
], function (wrapper) {
    'use strict';

    return function (placeOrderAction) {
        return wrapper.wrap(placeOrderAction, function (originalPlaceOrderAction, paymentData, messageContainer) {

            if(window.configValue)
            {
                return  originalPlaceOrderAction(paymentData, messageContainer);
            }
            else 
            {
                alert("Please enabled configuration then place orer");
            }

             
        });
    };
});
