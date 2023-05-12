class Allergies{

  constructor(){
    this.id = ''
    this.patient_id = ''
    this.Medication_allergies = ''
    this.name = ''
    this.severity = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/allergies.php?id=' + this.id + '&patient_id=' + this.patient_id + '&Medication_allergies=' + this.Medication_allergies + '&name=' + this.name + '&severity=' + this.severity + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/allergies.php?id=' + this.id + '&patient_id=' + this.patient_id + '&Medication_allergies=' + this.Medication_allergies + '&name=' + this.name + '&severity=' + this.severity + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/allergies.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/allergies.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/allergies.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/allergies.php?getById=' + this.id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/allergies.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByMedication_allergies(){ try{ eval(await this.request('controller/allergies.php?getByMedication_allergies=' + this.Medication_allergies)); }catch(err){}}
  async getByName(){ try{ eval(await this.request('controller/allergies.php?getByName=' + this.name)); }catch(err){}}
  async getBySeverity(){ try{ eval(await this.request('controller/allergies.php?getBySeverity=' + this.severity)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/allergies.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/allergies.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/allergies.php?id=' + this.id + '&patient_id=' + this.patient_id + '&Medication_allergies=' + this.Medication_allergies + '&name=' + this.name + '&severity=' + this.severity + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/allergies.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/allergies.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/allergies.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setMedication_allergies(Medication_allergies){ this.Medication_allergies = Medication_allergies; }
  setName(name){ this.name = name; }
  setSeverity(severity){ this.severity = severity; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getPatient_id(){ return this.patient_id; }
  getMedication_allergies(){ return this.Medication_allergies; }
  getName(){ return this.name; }
  getSeverity(){ return this.severity; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/allergies.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
