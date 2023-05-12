class Patient_history{

  constructor(){
    this.id = ''
    this.files_id = ''
    this.diagnosis = ''
    this.treatment = ''
    this.notes = ''
    this.created_at = ''
    this.updated_at = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/patient_history.php?id=' + this.id + '&files_id=' + this.files_id + '&diagnosis=' + this.diagnosis + '&treatment=' + this.treatment + '&notes=' + this.notes + '&created_at=' + this.created_at + '&updated_at=' + this.updated_at + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/patient_history.php?id=' + this.id + '&files_id=' + this.files_id + '&diagnosis=' + this.diagnosis + '&treatment=' + this.treatment + '&notes=' + this.notes + '&created_at=' + this.created_at + '&updated_at=' + this.updated_at + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/patient_history.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/patient_history.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/patient_history.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/patient_history.php?getById=' + this.id)); }catch(err){}}
  async getByFiles_id(){ try{ eval(await this.request('controller/patient_history.php?getByFiles_id=' + this.files_id)); }catch(err){}}
  async getByDiagnosis(){ try{ eval(await this.request('controller/patient_history.php?getByDiagnosis=' + this.diagnosis)); }catch(err){}}
  async getByTreatment(){ try{ eval(await this.request('controller/patient_history.php?getByTreatment=' + this.treatment)); }catch(err){}}
  async getByNotes(){ try{ eval(await this.request('controller/patient_history.php?getByNotes=' + this.notes)); }catch(err){}}
  async getByCreated_at(){ try{ eval(await this.request('controller/patient_history.php?getByCreated_at=' + this.created_at)); }catch(err){}}
  async getByUpdated_at(){ try{ eval(await this.request('controller/patient_history.php?getByUpdated_at=' + this.updated_at)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/patient_history.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/patient_history.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/patient_history.php?id=' + this.id + '&files_id=' + this.files_id + '&diagnosis=' + this.diagnosis + '&treatment=' + this.treatment + '&notes=' + this.notes + '&created_at=' + this.created_at + '&updated_at=' + this.updated_at + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/patient_history.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/patient_history.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/patient_history.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setFiles_id(files_id){ this.files_id = files_id; }
  setDiagnosis(diagnosis){ this.diagnosis = diagnosis; }
  setTreatment(treatment){ this.treatment = treatment; }
  setNotes(notes){ this.notes = notes; }
  setCreated_at(created_at){ this.created_at = created_at; }
  setUpdated_at(updated_at){ this.updated_at = updated_at; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getFiles_id(){ return this.files_id; }
  getDiagnosis(){ return this.diagnosis; }
  getTreatment(){ return this.treatment; }
  getNotes(){ return this.notes; }
  getCreated_at(){ return this.created_at; }
  getUpdated_at(){ return this.updated_at; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/patient_history.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
