<?php namespace Sampleapp\ServiceProviders\Validators;

class UserValidator extends Validator {

        /**
         * Validation rules for User model
         */
        public static $rules = array(
                'username' => 'required',
        );

}
