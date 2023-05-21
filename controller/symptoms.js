class Symptoms{

  constructor(){
    this.id = ''
    this.patient_id = ''
    this.symptom_name = ''
    this.start_date = ''
    this.end_date = ''
    this.notes = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/symptoms.php?id=' + this.id + '&patient_id=' + this.patient_id + '&symptom_name=' + this.symptom_name + '&start_date=' + this.start_date + '&end_date=' + this.end_date + '&notes=' + this.notes + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/symptoms.php?id=' + this.id + '&patient_id=' + this.patient_id + '&symptom_name=' + this.symptom_name + '&start_date=' + this.start_date + '&end_date=' + this.end_date + '&notes=' + this.notes + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/symptoms.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/symptoms.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/symptoms.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/symptoms.php?getById=' + this.id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/symptoms.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getBySymptom_name(){ try{ eval(await this.request('controller/symptoms.php?getBySymptom_name=' + this.symptom_name)); }catch(err){}}
  async getByStart_date(){ try{ eval(await this.request('controller/symptoms.php?getByStart_date=' + this.start_date)); }catch(err){}}
  async getByEnd_date(){ try{ eval(await this.request('controller/symptoms.php?getByEnd_date=' + this.end_date)); }catch(err){}}
  async getByNotes(){ try{ eval(await this.request('controller/symptoms.php?getByNotes=' + this.notes)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/symptoms.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/symptoms.php?id=' + this.id + '&patient_id=' + this.patient_id + '&symptom_name=' + this.symptom_name + '&start_date=' + this.start_date + '&end_date=' + this.end_date + '&notes=' + this.notes + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/symptoms.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/symptoms.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/symptoms.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setSymptom_name(symptom_name){ this.symptom_name = symptom_name; }
  setStart_date(start_date){ this.start_date = start_date; }
  setEnd_date(end_date){ this.end_date = end_date; }
  setNotes(notes){ this.notes = notes; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getPatient_id(){ return this.patient_id; }
  getSymptom_name(){ return this.symptom_name; }
  getStart_date(){ return this.start_date; }
  getEnd_date(){ return this.end_date; }
  getNotes(){ return this.notes; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/symptoms.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
