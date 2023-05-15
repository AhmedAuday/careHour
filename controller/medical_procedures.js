class Medical_procedures{

  constructor(){
    this.id = ''
    this.patient_id = ''
    this.doctor_id = ''
    this.procedure_date = ''
    this.procedure_type = ''
    this.procedure_notes = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/medical_procedures.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&procedure_date=' + this.procedure_date + '&procedure_type=' + this.procedure_type + '&procedure_notes=' + this.procedure_notes + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/medical_procedures.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&procedure_date=' + this.procedure_date + '&procedure_type=' + this.procedure_type + '&procedure_notes=' + this.procedure_notes + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/medical_procedures.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/medical_procedures.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/medical_procedures.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/medical_procedures.php?getById=' + this.id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/medical_procedures.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByDoctor_id(){ try{ eval(await this.request('controller/medical_procedures.php?getByDoctor_id=' + this.doctor_id)); }catch(err){}}
  async getByProcedure_date(){ try{ eval(await this.request('controller/medical_procedures.php?getByProcedure_date=' + this.procedure_date)); }catch(err){}}
  async getByProcedure_type(){ try{ eval(await this.request('controller/medical_procedures.php?getByProcedure_type=' + this.procedure_type)); }catch(err){}}
  async getByProcedure_notes(){ try{ eval(await this.request('controller/medical_procedures.php?getByProcedure_notes=' + this.procedure_notes)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/medical_procedures.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/medical_procedures.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/medical_procedures.php?id=' + this.id + '&patient_id=' + this.patient_id + '&doctor_id=' + this.doctor_id + '&procedure_date=' + this.procedure_date + '&procedure_type=' + this.procedure_type + '&procedure_notes=' + this.procedure_notes + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/medical_procedures.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/medical_procedures.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/medical_procedures.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setDoctor_id(doctor_id){ this.doctor_id = doctor_id; }
  setProcedure_date(procedure_date){ this.procedure_date = procedure_date; }
  setProcedure_type(procedure_type){ this.procedure_type = procedure_type; }
  setProcedure_notes(procedure_notes){ this.procedure_notes = procedure_notes; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getPatient_id(){ return this.patient_id; }
  getDoctor_id(){ return this.doctor_id; }
  getProcedure_date(){ return this.procedure_date; }
  getProcedure_type(){ return this.procedure_type; }
  getProcedure_notes(){ return this.procedure_notes; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/medical_procedures.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
