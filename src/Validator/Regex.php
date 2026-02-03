<?php

namespace App\Validator;

final class Regex
{
    public const USAGE = '/^[a-zA-Z]{2,20}$/';
    public const PASSWORD = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
    public const EMAIL = '/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}$/';
    public const PHONE = '/^\+?[0-9]{10,15}$/';
    public const ZIP_CODE = '/^\d{5}$/';
    public const CITY = '/^[a-zA-Z\s\-]{2,50}$/';
    public const STREET = '/^[a-zA-Z0-9\s\.,\'\-]{5,100}$/';
    public const NUMBER = '/^[0-9]+$/';
    public const COMPANY_NAME = '/^[a-zA-Z0-9\s\.,\'\-]{2,100}$/';
    public const SIRET = '/^\d{14}$/';
}