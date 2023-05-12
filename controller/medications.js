class Medications{

  constructor(){
    this.id = ''
    this.doctor_id = ''
    this.patient_id = ''
    this.medication_name = ''
    this.dosage = ''
    this.frequency = ''
    this.start_date = ''
    this.end_date = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/medications.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&medication_name=' + this.medication_name + '&dosage=' + this.dosage + '&frequency=' + this.frequency + '&start_date=' + this.start_date + '&end_date=' + this.end_date + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/medications.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&medication_name=' + this.medication_name + '&dosage=' + this.dosage + '&frequency=' + this.frequency + '&start_date=' + this.start_date + '&end_date=' + this.end_date + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/medications.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/medications.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/medications.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/medications.php?getById=' + this.id)); }catch(err){}}
  async getByDoctor_id(){ try{ eval(await this.request('controller/medications.php?getByDoctor_id=' + this.doctor_id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/medications.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByMedication_name(){ try{ eval(await this.request('controller/medications.php?getByMedication_name=' + this.medication_name)); }catch(err){}}
  async getByDosage(){ try{ eval(await this.request('controller/medications.php?getByDosage=' + this.dosage)); }catch(err){}}
  async getByFrequency(){ try{ eval(await this.request('controller/medications.php?getByFrequency=' + this.frequency)); }catch(err){}}
  async getByStart_date(){ try{ eval(await this.request('controller/medications.php?getByStart_date=' + this.start_date)); }catch(err){}}
  async getByEnd_date(){ try{ eval(await this.request('controller/medications.php?getByEnd_date=' + this.end_date)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/medications.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/medications.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/medications.php?id=' + this.id + '&doctor_id=' + this.doctor_id + '&patient_id=' + this.patient_id + '&medication_name=' + this.medication_name + '&dosage=' + this.dosage + '&frequency=' + this.frequency + '&start_date=' + this.start_date + '&end_date=' + this.end_date + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/medications.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/medications.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/medications.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setDoctor_id(doctor_id){ this.doctor_id = doctor_id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setMedication_name(medication_name){ this.medication_name = medication_name; }
  setDosage(dosage){ this.dosage = dosage; }
  setFrequency(frequency){ this.frequency = frequency; }
  setStart_date(start_date){ this.start_date = start_date; }
  setEnd_date(end_date){ this.end_date = end_date; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getDoctor_id(){ return this.doctor_id; }
  getPatient_id(){ return this.patient_id; }
  getMedication_name(){ return this.medication_name; }
  getDosage(){ return this.dosage; }
  getFrequency(){ return this.frequency; }
  getStart_date(){ return this.start_date; }
  getEnd_date(){ return this.end_date; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/medications.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
