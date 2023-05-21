class Prescriptions{

  constructor(){
    this.id = ''
    this.patient_id = ''
    this.doctor_id = ''
    this.medication_id = ''
    this.prescription_date = ''
    this.dosage = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/prescriptions.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&medication_id=' + this.medication_id + '&prescription_date=' + this.prescription_date + '&dosage=' + this.dosage + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/prescriptions.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&medication_id=' + this.medication_id + '&prescription_date=' + this.prescription_date + '&dosage=' + this.dosage + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/prescriptions.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/prescriptions.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/prescriptions.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/prescriptions.php?getById=' + this.id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/prescriptions.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByDoctor_id(){ try{ eval(await this.request('controller/prescriptions.php?getByDoctor_id=' + this.doctor_id)); }catch(err){}}
  async getByMedication_id(){ try{ eval(await this.request('controller/prescriptions.php?getByMedication_id=' + this.medication_id)); }catch(err){}}
  async getByPrescription_date(){ try{ eval(await this.request('controller/prescriptions.php?getByPrescription_date=' + this.prescription_date)); }catch(err){}}
  async getByDosage(){ try{ eval(await this.request('controller/prescriptions.php?getByDosage=' + this.dosage)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/prescriptions.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/prescriptions.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&medication_id=' + this.medication_id + '&prescription_date=' + this.prescription_date + '&dosage=' + this.dosage + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/prescriptions.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/prescriptions.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/prescriptions.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setDoctor_id(doctor_id){ this.doctor_id = doctor_id; }
  setMedication_id(medication_id){ this.medication_id = medication_id; }
  setPrescription_date(prescription_date){ this.prescription_date = prescription_date; }
  setDosage(dosage){ this.dosage = dosage; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getPatient_id(){ return this.patient_id; }
  getDoctor_id(){ return this.doctor_id; }
  getMedication_id(){ return this.medication_id; }
  getPrescription_date(){ return this.prescription_date; }
  getDosage(){ return this.dosage; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/prescriptions.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
