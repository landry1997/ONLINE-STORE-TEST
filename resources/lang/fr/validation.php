<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'L\'attribut doit être accepté.',
    'active_url' => 'L\'attribut n\'est pas une URL valide.',
    'after' => 'L\'attribut doit être une date après :date.',
    'after_or_equal' => 'L\'attribut doit être une date postérieure ou égale à :date.',
    'alpha' => 'L\'attribut ne doit contenir que des lettres.',
    'alpha_dash' => 'L\'attribut ne doit contenir que des lettres, des chiffres, des tirets et des caractères de soulignement..',
    'alpha_num' => 'L\'attribut ne doit contenir que des lettres et des chiffres..',
    'array' => 'L\'attribut doit être un tableau.',
    'before' => 'L\'attribut doit être une date antérieure à :date.',
    'before_or_equal' => 'L\'attribut doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'L\'attribut doit être compris entre :min and :max.',
        'file' => 'L\'attribut doit être compris entre :min and :max kilo-octets.',
        'string' => 'L\'attribut doit être compris entre :min and :max caractères.',
        'array' => 'L\'attribut doit avoir entre :min and :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux..',
    'confirmed' => 'La confirmation de L\'attribut ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'L\'attribut n\'est pas une date valide.',
    'date_equals' => 'L\'attribut doit être une date égale à :date.',
    'date_format' => 'L\'attribut ne correspond pas au format :format.',
    'different' => 'L\'attribut et l\'autre doivent être différents..',
    'digits' => 'L\'attribut doit être :digits digits.',
    'digits_between' => 'L\'attribut doit être compris entre :min and :max digits.',
    'dimensions' => 'L\'attribut a des dimensions d\'image invalides.',
    'distinct' => 'Le champ : a une valeur en double.',
    'email' => 'L\'attribut doit être une adresse électronique valide.',
    'ends_with' => 'L\'attribut doit se terminer par l\'un des éléments suivants: :values.',
    'exists' => 'L\'attribut sélectionné n\'est pas valide.',
    'file' => 'L\'attribut doit être un fichier.',
    'filled' => 'Ce champ : doit avoir une valeur.',
    'gt' => [
        'numeric' => 'L\'attribut doit être supérieur à :value.',
        'file' => 'L\'attribut doit être supérieur à :value kilo-octets.',
        'string' => 'L\'attribut doit être supérieur à :value caractères.',
        'array' => 'L\'attribut must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'L\'attribut doit être supérieur à ou égal à :value.',
        'file' => 'L\'attribut doit être supérieur à ou égal à :value kilo-octets.',
        'string' => 'L\'attribut doit être supérieur à ou égal à :value caractères.',
        'array' => 'L\'attribut doit avoir :value éléments ou plus..',
    ],
    'image' => 'L\'attribut doit être une image.',
    'in' => 'L\'attribut sélectionné n\'est pas valide.',
    'in_array' => 'Le champ : n\'existe pas dans :other.',
    'integer' => 'L\'attribut doit être un nombre entier.',
    'ip' => 'L\'attribut doit être une adresse IP valide..',
    'ipv4' => 'L\'attribut doit être une adresse IPv4 valide..',
    'ipv6' => 'L\'attribut doit être une adresse IPv6 valide..',
    'json' => 'L\'attribut doit être une chaîne JSON valide..',
    'lt' => [
        'numeric' => 'L\'attribut doit être inférieur à :value.',
        'file' => 'L\'attribut doit être inférieur à :value kilo-octets.',
        'string' => 'L\'attribut doit être inférieur à :value caractères.',
        'array' => 'L\'attribut doit avoir moins de  :éléments.',
    ],
    'lte' => [
        'numeric' => 'L\'attribut doit être inférieur à ou égal à :value.',
        'file' => 'L\'attribut doit être inférieur à ou égal à :value kilo-octets.',
        'string' => 'L\'attribut doit être inférieur à ou égal à :value caractères.',
        'array' => 'L\'attribut ne doit pas avoir plus de :value éléments.',
    ],
    'max' => [
        'numeric' => 'L\'attribut ne doit pas être supérieure à :max.',
        'file' => 'L\'attribut ne doit pas être supérieure à :max kilo-octets.',
        'string' => 'L\'attribut ne doit pas être supérieure à :max caractères.',
        'array' => 'L\'attribut ne doit pas avoir plus de :max items.',
    ],
    'mimes' => 'L\'attribut doit être un fichier de type: :values.',
    'mimetypes' => 'L\'attribut doit être un fichier de type: :values.',
    'min' => [
        'numeric' => 'L\'attribut doit être au moins égal à :min.',
        'file' => 'L\'attribut doit être au moins égal à :min kilo-octets.',
        'string' => 'L\'attribut doit être au moins égal à :min caractères.',
        'array' => 'L\'attribut doit avoir au moins :min items.',
    ],
    'multiple_of' => 'L\'attribut doit être un multiple de :value.',
    'not_in' => 'L\'attribut est invalide.',
    'not_regex' => 'L\'attribut format is invalid.',
    'numeric' => 'L\'attribut doit etre a number.',
    'password' => 'The password is incorrect.',
    'present' => 'L\'attribut field doit etre present.',
    'regex' => 'le format de  n\'est pas valide.',
    'required' => 'Ce champ est obligatoire.',
    'required_if' => 'Ce champ est obligatoire quand :l\'autre est :value.',
    'required_unless' => 'Ce champ est obligatoire unless :l\'autre est dans :values.',
    'required_with' => 'Ce champ est obligatoire quand :est présent.',
    'required_with_all' => 'Ce champ est obligatoire quand :sont présent.',
    'required_without' => 'Ce champ est obligatoire quand :n\'est pas présent.',
    'required_without_all' => 'Ce champ est obligatoire quand aucun:n\'est présent.',
    'prohibited' => 'L\'attribut est interdit.',
    'prohibited_if' => 'L\'attribut est interdit quand :existe :value.',
    'prohibited_unless' => 'L\'attribut est interdit seulement :other is in :values.',
    'same' => 'L\'attribut et :doivent corespondre.',
    'size' => [
        'numeric' => 'L\'attribut doit etre :.',
        'file' => 'L\'attribut doit etre : kilo-octets.',
        'string' => 'L\'attribut doit etre : caractères.',
        'array' => 'L\'attribut doit contenir : éléments.',
    ],
    'starts_with' => 'L\'attribut doit commencer par l\'un des éléments suivants: :values.',
    'string' => 'L\'attribut doit etre une chaine de caractères.',
    'timezone' => 'L\'attribut doit etre l\'heure de la zone prédéfinie.',
    'unique' => 'L\'attribut est déja utilisé.',
    'uploaded' => 'L\'attribut n\'a pas pu etre téléchargée.',
    'url' => 'L\'attribut doit etre une URL valide.',
    'uuid' => 'L\'attribut doit etre un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'message personnalisé',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
