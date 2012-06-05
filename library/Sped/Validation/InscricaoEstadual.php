<?php

/**
 * Validador de Inscricao Estadual
 * @name InscricaoEstadual
 * @category Sped
 * @package Sped\Validation\Rules
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 24/05/2012
 */
class Sped_Validation_InscricaoEstadual
{

    /**
     * Validação do CNPJ. 
     */
    function __construct()
    {
        $this->digitsCount = 1;
        $this->maxMultiplier = 9;
    }

    /**
     * Valida se o CNPJ está correto.
     * @param string|int|Sped_Types_Cnpj $value
     * @return boolean 
     */
    public function validate($value)
    {
        if (!$value instanceof Sped_Types_Cnpj)
            $value = new Sped_Types_Cnpj($value);

        return parent::validate($value);
    }


//
//  public InscricaoEstadual()
//  {
//    defineCoeficients();
//  }
//
//  public abstract int defaultDigitCount();
//
//  public abstract int getDvCount();
//
//  public abstract void defineCoeficients();
//
//  public abstract String getMask();
//
//  public void addValidator(ChainValidator nextValidator)
//  {
//    this.nextValidator = nextValidator;
//  }
//
//  public boolean validate(String inscricaoEstadual)
//  {
//    setNumber(inscricaoEstadual);
//
//    if (isValid()) {
//      return true;
//    }
//    if (this.nextValidator == null) {
//      return false;
//    }
//
//    return this.nextValidator.validate(inscricaoEstadual);
//  }
//
//  public boolean isValid()
//  {
//    defineCoeficients();
//
//    if (!isValidDigitCount()) {
//      return false;
//    }
//
//    int sum = getCalcSum();
//    int mod = sum % 11;
//    int dv1;
//    int dv1;
//    if (mod <= 1)
//      dv1 = 0;
//    else {
//      dv1 = 11 - mod;
//    }
//
//    return dv1 == getDv1();
//  }
//
//  public void validate()
//    throws ValidationException
//  {
//    if (!isValid())
//      throw new ValidationException();
//  }
//
//  public String getNumber()
//  {
//    return this.number;
//  }
//
//  public void setNumber(String number)
//  {
//    this.number = number.replaceAll("[^0-9]*", "");
//  }
//
//  public void setNumberEspecial(String number)
//  {
//    this.number = number;
//  }
//
//  public String getBaseNumber()
//  {
//    String s = this.number;
//    String result = "";
//    for (int i = 0; i < s.length(); i++) {
//      if (getDvCount() == 1) {
//        if (i != getDv1Position()) {
//          result = result + s.charAt(i);
//        }
//      }
//      else if ((i != getDv1Position()) && (i != getDv2Position())) {
//        result = result + s.charAt(i);
//      }
//    }
//
//    return result;
//  }
//
//  public String getValue()
//  {
//    return NumberComposedMasker.applyMask(this.number, getMask());
//  }
//
//  public boolean isFixDigitCorrect(int position, char specialDigit)
//  {
//    boolean result = getNumber().charAt(position) == specialDigit;
//    if (!result) {
//      this.invalidCause = ("The digit on position[" + position + "] must be '" + specialDigit + "'");
//    }
//    return result;
//  }
//
//  public boolean isValidDigitCount()
//  {
//    boolean result = defaultDigitCount() == getNumber().length();
//    if (!result) {
//      this.invalidCause = "Incorrect Format";
//    }
//    return result;
//  }
//
//  public String getInvalidCause()
//  {
//    return this.invalidCause;
//  }
//
//  public long toLong()
//  {
//    return Long.parseLong(this.number);
//  }
//
//  public String toString()
//  {
//    return getValue();
//  }
//
//  public boolean equals(Object obj)
//  {
//    return toString().equals(obj.toString());
//  }
//
//  protected int getCalcSum()
//  {
//    return getCalcSum(0, this.coeficients.size() - 1, getNumber());
//  }
//
//  protected int getCalcSum(int digitBegin, int digitEnd, String digits)
//  {
//    int result = 0;
//    String dStr;
//    String dStr;
//    if ((digits == null) || (digits.length() < 1))
//      dStr = getNumber();
//    else {
//      dStr = digits;
//    }
//
//    for (int i = digitBegin; i <= digitEnd; i++) {
//      Integer c = (Integer)this.coeficients.get(i);
//      Integer d = Integer.valueOf("" + dStr.charAt(i));
//      result += d.intValue() * c.intValue();
//    }
//
//    return result;
//  }
//
//  protected void setCoeficientList(String coeficients)
//  {
//    this.coeficients.clear();
//    String s = "";
//    for (int i = 0; i < coeficients.length(); i++) {
//      s = String.valueOf(coeficients.charAt(i));
//      this.coeficients.add(Integer.valueOf(Integer.parseInt(s)));
//    }
//  }
//
//  protected void addCoeficient(int coeficient)
//  {
//    this.coeficients.add(Integer.valueOf(coeficient));
//  }
//
//  protected void addCoeficientLeft(int coeficient)
//  {
//    this.coeficients.add(0, Integer.valueOf(coeficient));
//  }
//
//  protected void clearCoeficients()
//  {
//    this.coeficients.clear();
//  }
//
//  protected String getCoeficientList()
//  {
//    for (int i = 0; i < this.coeficients.size(); i++) {
//      if (this.coeficients.get(i).toString().length() > 1) {
//        return null;
//      }
//    }
//    String result = "";
//    for (i = 0; i < this.coeficients.size(); i++) {
//      result = result + this.coeficients.get(i).toString();
//    }
//    return result;
//  }
//
//  protected short getDv1()
//  {
//    return getDigitValue(getDv1Position());
//  }
//
//  protected int getDv1Position()
//  {
//    if (getDvCount() == 1) {
//      return defaultDigitCount() - 1;
//    }
//    return defaultDigitCount() - 2;
//  }
//
//  protected short getDv2()
//  {
//    return getDigitValue(getDv2Position());
//  }
//
//  protected int getDv2Position()
//  {
//    return defaultDigitCount() - 1;
//  }
//
//  private char a(int digitPosition)
//  {
//    return getNumber().charAt(digitPosition);
//  }
//
//  protected void setInvalidCause(String invalidCause)
//  {
//    this.invalidCause = invalidCause;
//  }
//
//  protected short getDigitValue(int digitPosition)
//  {
//    String s = "" + a(digitPosition);
//    return Short.parseShort(s);
//  }
}