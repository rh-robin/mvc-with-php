<?php


namespace app\models;


use app\core\Model;

class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'body' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'subject' => "Enater your subject",
            'email' => "Enater your email",
            'body' => "Enater message body",
        ];
    }

    public function send()
    {
        return true;
    }
}