<?
class FormOrder extends CFormModel
{
	public $firstName;
	public $lastName;
	public $email;
	public $password;
	public $confirmPassword;
	public $gender;
	public $birthdate;
	public $identityNumber;
	public $street;
	public $houseNumber;
	public $mailboxNumber;
	public $postalCode;
	public $city;
	public $crmId;
	public $companyPerson;
	public $companyName;
	public $vatNumber;

	public function rules()
	{
		return array(
			array('firstName', 'required', 'message' => Yii::t('l10n', 'First name can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array("lastName", "required", "message" => Yii::t("l10n", "Last name can not be empty"), "on" => "default, step1Person, salesDefault, salesStep1Person"),
			array('email', 'required', 'message' => Yii::t('l10n', 'Email address can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('email', 'email', 'message' => Yii::t('l10n', 'E-mail address is not valid'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('email', 'length', 'max' => 254, 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('password', 'required', 'message' => Yii::t('l10n', 'Password can not be empty'), 'on' => 'default, step1Person'),
			array('password', 'match', 'pattern' => '/^.*(?=.{8,15})(?=.*\d)(?=.*[a-zA-Z]).*$/', 'message' => Yii::t('l10n', 'Your password must be at least 8 characters long and must contain one or more digits'), 'on' => 'default, step1Person'),
			array('confirmPassword', 'required', 'message' => Yii::t('l10n', 'Confirm password can not be empty'), 'on' => 'default, step1Person'),
			array('confirmPassword', 'compare', 'compareAttribute' => 'password', 'message' => Yii::t('l10n', 'Confirm Password must be repeated exactly'), 'on' => 'default, step1Person'),
			array('gender', 'required', 'message' => Yii::t('l10n', 'Gender can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('birthdate', 'required', 'message' => Yii::t('l10n', 'Birth date can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('birthdate', 'checkMinimumAge', 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('identityNumber', 'required', 'message' => Yii::t('l10n', 'Identity card number can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('identityNumber', 'IDCardValidation', 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('street', 'required', 'message' => Yii::t('l10n', 'Street can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('houseNumber', 'required', 'message' => Yii::t('l10n', 'House number can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('postalCode', 'required', 'message' => Yii::t('l10n', 'Zip code can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('city', 'required', 'message' => Yii::t('l10n', 'City can not be empty'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('mailboxNumber', 'match', 'pattern' => '/^[a-zA-Z0-9À-ÿ\.\-\/ ]+$/', 'message' => Yii::t('l10n', 'Mailbox number is invalid'), 'on' => 'default, step1Person, salesDefault, salesStep1Person'),
			array('companyName', 'required', 'message' => Yii::t('l10n', 'Company name can not be empty'), 'on' => 'default, salesDefault'),
			array('vatNumber', 'required', 'message' => Yii::t('l10n', 'VAT number can not be empty'), 'on' => 'default, step1Company, salesDefault'),
			array('vatNumber', 'length', 'min' => 15, 'max' => 15, 'message' => Yii::t('l10n', 'VAT number should be 12 characters long'), 'on' => 'default, step1Company, salesDefault'),
			array('vatNumber', 'vatValidation', 'on' => 'default, step1Company, salesDefault'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'firstName'       => Yii::t('l10n', 'First Name'),
			'lastName'        => Yii::t('l10n', 'Last Name'),
			'email'           => Yii::t('l10n', 'Email'),
			'password'        => Yii::t('l10n', 'Password'),
			'confirmPassword' => Yii::t('l10n', 'Confirm Password'),
			'gender'          => Yii::t('l10n', 'Gender'),
			'birthdate'       => Yii::t('l10n', 'Birthdate'),
			'identityNumber'  => Yii::t('l10n', 'Identity Number'),
			'street'          => Yii::t('l10n', 'Street'),
			'houseNumber'     => Yii::t('l10n', 'House Number'),
			'mailboxNumber'   => Yii::t('l10n', 'Mailbox'),
			'postalCode'      => Yii::t('l10n', 'Postal Code'),
			'city'            => Yii::t('l10n', 'City'),
			'companyName'     => Yii::t('l10n', 'Company Name'),
			'vatNumber'       => Yii::t('l10n', 'VAT Number'),
		);
	}

}